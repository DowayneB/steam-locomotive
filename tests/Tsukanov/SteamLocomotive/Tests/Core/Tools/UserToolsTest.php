<?php
namespace Tsukanov\SteamLocomotive\Tests\Core\Tools;

use Tsukanov\SteamLocomotive\Core\Tools\User;

class UserToolsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var User
     */
    protected $user_tools;

    protected function setUp()
    {
        $this->user_tools = new User();
    }

    public function testCommunityIdConverter()
    {
        $this->assertEquals(76561197960287930, $this->user_tools->convertToCommunityId(76561197960287930));
        $this->assertEquals(76561197960287930, $this->user_tools->convertToCommunityId("STEAM_0:0:11101"));
        $this->assertEquals(76561197960287930, $this->user_tools->convertToCommunityId("0:0:11101"));
    }

    public function testIdTypeDetector()
    {
        $this->assertEquals(USER_ID_TYPE_VANITY, $this->user_tools->getTypeOfId("Rabscuttle"));
        $this->assertEquals(USER_ID_TYPE_COMMUNITY, $this->user_tools->getTypeOfId(76561197960287930));
        $this->assertEquals(USER_ID_TYPE_STEAM, $this->user_tools->getTypeOfId("STEAM_0:0:11101"));
        $this->assertEquals(USER_ID_TYPE_STEAM, $this->user_tools->getTypeOfId("0:0:11101"));
    }

    public function testIdValidator()
    {
        $this->assertTrue($this->user_tools->validateUserId("Rabscuttle", USER_ID_TYPE_VANITY));
        $this->assertTrue($this->user_tools->validateUserId(76561197960287930, USER_ID_TYPE_COMMUNITY));
        $this->assertTrue($this->user_tools->validateUserId("STEAM_0:0:11101", USER_ID_TYPE_STEAM));
        $this->assertTrue($this->user_tools->validateUserId("0:0:11101", USER_ID_TYPE_STEAM));
    }

}