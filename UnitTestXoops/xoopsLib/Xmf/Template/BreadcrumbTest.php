<?php
/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

namespace Xmf\Template;

require_once(dirname(__FILE__).'/../../../init_mini.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-05-22 at 19:56:37.
 */
class BreadcrumbTest extends \MY_UnitTestCase
{
    /**
     * @var Breadcrumb
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Breadcrumb;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xmf\Template\Breadcrumb::setItems
     * @todo   Implement testSetItems().
     */
    public function testSetItems()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
