<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:22:3 +0000.
 */

use App\Repositories\Cid10Repository;

/**
 * Class Cid10Test
 */
class Cid10Test extends TestCase
{
    /**
     * Test getAll method.
     *
     * @return void
     */
    public function testGetAll()
    {
        $cid10Repository = new Cid10Repository();

        $cids = $cid10Repository->all();

        $this->assertEquals(count($cids) , 14233);
    }

    /**
     * Test find method.
     *
     * @return void
     */
    public function testFind()
    {
        $cid10Repository = new Cid10Repository();

        $cid = $cid10Repository->find('A03.2');

        $this->assertIsObject($cid);
    }


}
