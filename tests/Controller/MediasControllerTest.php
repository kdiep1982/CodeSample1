<?php
namespace Tests\Controller;
use Tests\TestCase;

class MediasControllerTest extends TestCase
{
    public function testMediaDetail()
    {
        $response = $this->get('/detail/390043');

        $response->assertStatus(200);
    }

    public function testNewArrivalNotError()
    {
        $response = $this->get('/newArrival');

        $response->assertStatus(200);
    }
    public function testTopRatedNotError()
    {
        $response = $this->get('/topRated');

        $response->assertStatus(200);
    }
    public function testUpcomingNotError()
    {
        $response = $this->get('/upcoming');

        $response->assertStatus(200);
    }
    public function testAiringTodayNotError()
    {
        $response = $this->get('/airingTodayTVShow');

        $response->assertStatus(200);
    }
    public function testTopRatedTvNotError()
    {
        $response = $this->get('/topRatedTV');

        $response->assertStatus(200);
    }
    public function testTopPopularTvNotError()
    {
        $response = $this->get('/popularTV');

        $response->assertStatus(200);
    }
}
?>