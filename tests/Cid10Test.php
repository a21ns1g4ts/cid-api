<?php
/**
 * Created by Atila Silva.
 * Date: Sáb, jan 2019 16:22:3 +0000.
 */

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
        $cid10Repository = app(\App\Repositories\Cid10RepositoryContract::class);

        $cids = $cid10Repository->all();

        $this->assertNotNull($cids);
    }

    /**
     * Test find method.
     *
     * @return void
     */
    public function testFind()
    {
        $cid10Repository = app(\App\Repositories\Cid10RepositoryContract::class);

        $cid = $cid10Repository->find('A00');

        $this->assertIsObject($cid);
    }

    /**
     * Test getAll api.
     *
     * @return void
     */
    public function testApiGetAll()
    {
        $this->get('cid10')->assertResponseOk();
    }

    /**
     * Test find api.
     *
     * @return void
     */
    public function testApiFind()
    {
        $this->get('cid10/A01')->assertResponseOk();
    }


}
