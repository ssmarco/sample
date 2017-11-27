<?php
class GalleryTest extends FunctionalTest
{
	/**
	 * @var Boolean If set to TRUE, this will force a test database to be generated
	 * in {@link setUp()}. Note that this flag is overruled by the presence of a
	 * {@link }, which always forces a database build.
	 */
	protected $usesDatabase = true;

	/**
	 * Set this to true on your sub-class to use the draft site by default for every test in this class.
	 *
	 * @var bool
	 */
	protected static $use_draft_site = false;

	public function testDefaultSortProperty()
	{
		$this->assertEquals('SortOrder', Gallery::$default_sort);
	}
}
