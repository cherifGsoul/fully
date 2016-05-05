<?php
namespace fully\modules\web\tests\unit\model;

use yii\codeception\TestCase;
use fully\modules\web\tests\unit\fixtures\FakeUser;
use Prophecy\Prophet;

class UserTest extends TestCase
{
    protected function setUp()
    {
        $this->prophet = new Prophet();
    }

    protected function tearDown()
    {
        $this->prophet->checkPredictions();
    }
    
    /**
     * @test
     */
    public function itHashsPassword()
    {
        $security = $this->prophet->prophesize('\yii\base\Security');
        $user = new FakeUser($security->reveal());
        $security->generatePasswordHash('qwerty')->willReturn('hashed_pass');
        $user->setPassword('qwerty');
        $this->assertEquals('hashed_pass', $user->getPassword());
    }
}