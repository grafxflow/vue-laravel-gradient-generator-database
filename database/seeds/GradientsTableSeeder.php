<?php

use Illuminate\Database\Seeder;

use App\Gradient;

class GradientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gradients = [
            ['title' => 'Title 1', 'gradient1' => '#30496B', 'gradient2' => '#30B8D2', 'created_at' => new DateTime],
            ['title' => 'Title 2', 'gradient1' => '#FBCA88', 'gradient2' => '#EF69AD', 'created_at' => new DateTime],
            ['title' => 'Title 3', 'gradient1' => '#B6C1D4', 'gradient2' => '#EC68B1', 'created_at' => new DateTime],
            ['title' => 'Title 4', 'gradient1' => '#ABE5E6', 'gradient2' => '#7062F0', 'created_at' => new DateTime],
            ['title' => 'Title 5', 'gradient1' => '#476892', 'gradient2' => '#59355D', 'created_at' => new DateTime],
            ['title' => 'Title 6', 'gradient1' => '#92F1D5', 'gradient2' => '#ABF6BD', 'created_at' => new DateTime],
            ['title' => 'Title 7', 'gradient1' => '#7D6AE7', 'gradient2' => '#56A2D5', 'created_at' => new DateTime],
            ['title' => 'Title 8', 'gradient1' => '#82E9E4', 'gradient2' => '#F3D62F', 'created_at' => new DateTime],
            ['title' => 'Title 9', 'gradient1' => '#239FE9', 'gradient2' => '#44D5F3', 'created_at' => new DateTime],
            ['title' => 'Title 10', 'gradient1' => '#3D3949', 'gradient2' => '#6772A4', 'created_at' => new DateTime],
            ['title' => 'Title 11', 'gradient1' => '#FD5A49', 'gradient2' => '#FDDC98', 'created_at' => new DateTime],
            ['title' => 'Title 12', 'gradient1' => '#9AD3DE', 'gradient2' => '#93B8C0', 'created_at' => new DateTime],
            ['title' => 'Title 13', 'gradient1' => '#F32F8E', 'gradient2' => '#B236D0', 'created_at' => new DateTime],
            ['title' => 'Title 14', 'gradient1' => '#247CC4', 'gradient2' => '#336BAE', 'created_at' => new DateTime],
            ['title' => 'Title 15', 'gradient1' => '#FB7140', 'gradient2' => '#FB9951', 'created_at' => new DateTime],
            ['title' => 'Title 16', 'gradient1' => '#6FE594', 'gradient2' => '#27A47C', 'created_at' => new DateTime],
            ['title' => 'Title 17', 'gradient1' => '#95FD48', 'gradient2' => '#19E9A6', 'created_at' => new DateTime],
            ['title' => 'Title 18', 'gradient1' => '#469FFF', 'gradient2' => '#A39AF9', 'created_at' => new DateTime],
            ['title' => 'Title 19', 'gradient1' => '#5CF0F8', 'gradient2' => '#ECDDFE', 'created_at' => new DateTime],
            ['title' => 'Title 20', 'gradient1' => '#F1467A', 'gradient2' => '#FB949E', 'created_at' => new DateTime],
            ['title' => 'Title 21', 'gradient1' => '#DAE7F0', 'gradient2' => '#FADAE7', 'created_at' => new DateTime],
            ['title' => 'Title 22', 'gradient1' => '#6155D4', 'gradient2' => '#5B97F2', 'created_at' => new DateTime],
            ['title' => 'Title 23', 'gradient1' => '#47AEA3', 'gradient2' => '#08B1C5', 'created_at' => new DateTime],
            ['title' => 'Title 24', 'gradient1' => '#DA1FF2', 'gradient2' => '#4C15D0', 'created_at' => new DateTime],
            ['title' => 'Title 25', 'gradient1' => '#D0F56B', 'gradient2' => '#5876FB', 'created_at' => new DateTime],
            ['title' => 'Title 26', 'gradient1' => '#FFE9D0', 'gradient2' => '#FD7153', 'created_at' => new DateTime],
            ['title' => 'Title 27', 'gradient1' => '#DBFDEC', 'gradient2' => '#FFC2D4', 'created_at' => new DateTime],
            ['title' => 'Title 28', 'gradient1' => '#C3A8EE', 'gradient2' => '#F5C1EA', 'created_at' => new DateTime],
            ['title' => 'Title 29', 'gradient1' => '#484C91', 'gradient2' => '#929BEF', 'created_at' => new DateTime],
            ['title' => 'Title 30', 'gradient1' => '#97F7FB', 'gradient2' => '#8D8AFC', 'created_at' => new DateTime],
        ];

        foreach($gradients as $gradient){
            Gradient::insert($gradient);
        }
    }
}
