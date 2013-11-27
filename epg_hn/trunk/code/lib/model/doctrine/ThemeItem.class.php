<?php

/**
 * ThemeItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    epg
 * @subpackage model
 * @author     Mozi Tek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ThemeItem extends BaseThemeItem
{
	protected $title;
	protected $display_name;
	protected $coverurl;

	public function getTitle() 
	{
		return $this->title;
	}

	public function getDisplayName() 
	{
		return $this->display_name;
	}

	public function getCoverurl()
	{
		return $this->coverurl;
	}

	public function setTitle($title) 
	{
		$this->title = $title;
	}

	public function setDisplayName($display_name) 
	{
		$this->display_name = $display_name;
	}

	public function setCoverurl($coverurl)
	{
		$this->coverurl = $coverurl;
	}
}