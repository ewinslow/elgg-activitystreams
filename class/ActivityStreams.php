<?php
class ActivityStreams {
	public static function getEntityAtomID(ElggEntity $entity) {
		$host = parse_url(elgg_get_site_url(), PHP_URL_HOST);
		$date = date('Y-m-d', $entity->time_created);
		$type = $entity->getType();
		$guid = $entity->getGUID();
		
		return "tag:$host,$date:/$type/$guid";
	}
	
	public static function getRiverAtomID(ElggRiverItem $item) {
		$host = parse_url(elgg_get_site_url(), PHP_URL_HOST);
		$date = date('Y-m-d', $item->posted);
		$id = $item->id;
		
		return "tag:$host,$date:/river/$id";
	}
}