<?php
namespace Model;

class Blocks extends Base
{
    //protected $db = 'DB';
	
	public function shoutboxLines($offset)
	{
		$shoutSQL = "SELECT B.id, B.uid, IF(B.uid=0,B.guest_name,U.nickname) as name, B.message, UNIX_TIMESTAMP(B.date) as date
									FROM `tbl_shoutbox`B 
									LEFT JOIN `tbl_users`U ON ( U.uid = B.uid )
								ORDER BY date DESC
								LIMIT :offset,5" ;

		return $this->exec($shoutSQL,[ ":offset" => $offset]);
	}

	function ajaxCalendar($params)
	{
		//$date = isset($params[1]) ? (list($year,$month)=explode("-", $params[1])) : FALSE;
		
		$firstEvent = $this->exec("SELECT UNIX_TIMESTAMP(S.date) AS date FROM `tbl_stories`S ORDER BY S.date ASC LIMIT 0,1")[0];
		$start = array ( "month"	=> date("n",$firstEvent['date']),
									 "year"		=> date("Y",$firstEvent['date']) );
		
		$target=explode("-",$params[1]);

		if ( sizeof($target>1 ) )
		{
			if ( (($target[0]>2000) && ($target[0]<=date("Y"))) && (($target[1]>0) && ($target[1]<13)) )
			{
				$c['month'] = $target[1];
				$c['year']  = $target[0];
			}
		}

		if ( !isset($c) )
		{
			$last =\Base::instance()->get('SESSION.lastCalendar');
			if ( $last > "" )
			{
				$target=explode("-",$last);
				$c['month'] = $target[1];
				$c['year']  = $target[0];
			}
			else
			{
				$c['month'] = date("n");
				$c['year']  = date("Y");
			}
		}
		\Base::instance()->set('SESSION.lastCalendar', $c['year']."-".$c['month']);
		
		$this->prepare ( "queryEvents", "SELECT COUNT( S.title ) AS per_day, DAY( S.updated ) AS day_nr
												FROM `tbl_stories` S
												WHERE MONTH(S.updated) = :month AND YEAR(S.updated) = :year AND S.validated > 0
												GROUP BY DAY( S.updated ) " );
		$this->bindValue("queryEvents", ":month", $c['month'], \PDO::PARAM_INT);
		$this->bindValue("queryEvents", ":year",  $c['year'],	\PDO::PARAM_INT);
		$eventResults = $this->execute("queryEvents");

		if ( sizeof($eventResults) > 0 )
		{
			foreach ( $eventResults as $event )
			{
				$events[$event['day_nr']] = $event['day_nr'];
			}
		}
		else $events = FALSE;

		return [$events, $c, $start];
	}
	
	function menuData($selected="")
	{
		if ( $selected > "")
		{
			$menuSQL = "SELECT M.id,M.label,M.link,M1.label as sub_label,M1.link as sub_link,M1.child_of
											FROM `tbl_menu` M
											LEFT JOIN `tbl_menu` M1
												ON ( M.id = M1.child_of AND ( M.link =:link OR FIND_IN_SET(:link2, M.used_for)>0 ) )
											WHERE M.child_of IS NULL AND M.active = '1'
											ORDER BY M.order,M1.order, M1.child_of";
			// ON ( M.id = M1.child_of AND M.link =:link )
			$temp = $this->exec($menuSQL, [ ":link" => $selected, ":link2" => $selected ] );
		}
		else
		{
			$menuSQL = "SELECT M.id,M.label,M.link,M.child_of
												FROM `tbl_menu` M
												WHERE M.child_of IS NULL AND M.active = '1'
												ORDER BY M.order";
			$temp = $this->exec($menuSQL);
		}
		foreach ( $temp as $tmp )
		{
			if ( $tmp['child_of']=="" )
				$menu['main'][] = [ "label" => $tmp['label'], "link" => $tmp['link'], "selected" => FALSE ];
			else
			{
				if(empty($hasMain))
				{
					$menu['main'][] = [ "label" => $tmp['label'], "link" => $tmp['link'], "selected" => TRUE ];
					$hasMain = TRUE;
				}
				$menu['sub'][] = [ "label" => $tmp['sub_label'], "link" => $tmp['sub_link'], "selected" => FALSE ];
			}
		}
		return $menu;
	}
}