<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['title' => 'Artificial Intelligence in Healthcare', 'category' => 'FYP', 'author' => 'John Doe', 'publication_date' => '2023-01-01'],
            ['title' => 'The Role of Renewable Energy in Climate Change Mitigation', 'category' => 'FYP', 'author' => 'Jane Smith', 'publication_date' => '2023-02-01'],
            ['title' => 'Data Science: The Future of Automation', 'category' => 'FYP', 'author' => 'Mark Lee', 'publication_date' => '2023-03-01'],
            ['title' => 'Electric Vehicles and the Future of Sustainable Transport', 'category' => 'FYP', 'author' => 'Sara Williams', 'publication_date' => '2023-04-01'],
            ['title' => 'Abbey Road by The Beatles', 'category' => 'CD', 'author' => 'The Beatles', 'publication_date' => '2022-11-01'],
            ['title' => '21 by Adele', 'category' => 'CD', 'author' => 'Adele', 'publication_date' => '2022-12-01'],
            ['title' => 'Digital Journalism and its Impact on Traditional Media', 'category' => 'Newspaper', 'author' => 'Robert Johnson', 'publication_date' => '2022-10-15'],
            ['title' => 'Social Media Psychological Impact on Teens', 'category' => 'Newspaper', 'author' => 'Emily White', 'publication_date' => '2022-11-05'],
            ['title' => 'Trends in eCommerce for 2023', 'category' => 'Newspaper', 'author' => 'David Brown', 'publication_date' => '2022-11-25'],
            ['title' => 'Ghost Stories of the 21st Century', 'category' => 'CD', 'author' => 'Coldplay', 'publication_date' => '2023-05-10'],
            ['title' => 'AI for a Better Tomorrow', 'category' => 'FYP', 'author' => 'Alex Cooper', 'publication_date' => '2023-01-12'],
            ['title' => 'Exploring the Depths of the Ocean', 'category' => 'FYP', 'author' => 'Sara Greene', 'publication_date' => '2023-02-15'],
            ['title' => 'Smart Cities: The Future of Urban Living', 'category' => 'FYP', 'author' => 'Ethan Brooks', 'publication_date' => '2023-03-07'],
            ['title' => 'Revolutionizing Education with Technology', 'category' => 'FYP', 'author' => 'Olivia Harris', 'publication_date' => '2023-04-10'],
            ['title' => 'AI-Powered Healthcare: Prospects and Challenges', 'category' => 'FYP', 'author' => 'Mason Clark', 'publication_date' => '2023-05-22'],
            ['title' => 'CD - The Dark Side of the Moon', 'category' => 'CD', 'author' => 'Pink Floyd', 'publication_date' => '2021-08-15'],
            ['title' => 'CD - Thriller', 'category' => 'CD', 'author' => 'Michael Jackson', 'publication_date' => '2020-11-18'],
            ['title' => 'CD - Back in Black', 'category' => 'CD', 'author' => 'AC/DC', 'publication_date' => '2022-06-24'],
            ['title' => 'CD - Rolling in the Deep', 'category' => 'CD', 'author' => 'Adele', 'publication_date' => '2022-12-05'],
            ['title' => 'CD - Imagine', 'category' => 'CD', 'author' => 'John Lennon', 'publication_date' => '2021-09-12'],
            ['title' => 'Newspaper - The Future of Renewable Energy', 'category' => 'Newspaper', 'author' => 'Brian Wilson', 'publication_date' => '2023-01-15'],
            ['title' => 'Newspaper - Global Impact of AI in Society', 'category' => 'Newspaper', 'author' => 'Emily Taylor', 'publication_date' => '2023-02-22'],
            ['title' => 'Newspaper - How Technology Is Shaping the Future', 'category' => 'Newspaper', 'author' => 'Matthew Lewis', 'publication_date' => '2023-03-18'],
            ['title' => 'Newspaper - The Rise of Green Technologies', 'category' => 'Newspaper', 'author' => 'Sophia Evans', 'publication_date' => '2023-04-30'],
            ['title' => 'Newspaper - The Role of Women in Tech Innovation', 'category' => 'Newspaper', 'author' => 'James Parker', 'publication_date' => '2023-05-12'],
            ['title' => 'The Psychology of Human-Machine Interaction', 'category' => 'FYP', 'author' => 'Liam Moore', 'publication_date' => '2023-06-14'],
            ['title' => 'Exploring Quantum Computing for Modern Applications', 'category' => 'FYP', 'author' => 'Isabella Mitchell', 'publication_date' => '2023-07-10'],
            ['title' => 'Using Blockchain for Secure Data Storage', 'category' => 'FYP', 'author' => 'Lucas Anderson', 'publication_date' => '2023-08-09'],
            ['title' => 'Understanding the Impact of Social Media on Youth', 'category' => 'FYP', 'author' => 'Charlotte Williams', 'publication_date' => '2023-09-05'],
            ['title' => 'Advancements in AI for Autonomous Vehicles', 'category' => 'FYP', 'author' => 'Amelia Davis', 'publication_date' => '2023-10-01'],
            // More rows...
            ['title' => 'CD - Bohemian Rhapsody', 'category' => 'CD', 'author' => 'Queen', 'publication_date' => '2021-10-05'],
            ['title' => 'CD - Let It Be', 'category' => 'CD', 'author' => 'The Beatles', 'publication_date' => '2022-03-11'],
            ['title' => 'CD - Unfinished Sympathy', 'category' => 'CD', 'author' => 'Massive Attack', 'publication_date' => '2023-01-21'],
            ['title' => 'CD - Sound & Vision', 'category' => 'CD', 'author' => 'David Bowie', 'publication_date' => '2021-12-15'],
            ['title' => 'CD - Lose Yourself', 'category' => 'CD', 'author' => 'Eminem', 'publication_date' => '2022-06-01'],
            ['title' => 'Newspaper - The Economic Impact of COVID-19', 'category' => 'Newspaper', 'author' => 'Benjamin Miller', 'publication_date' => '2022-02-28'],
            ['title' => 'Newspaper - Breakthroughs in Green Energy', 'category' => 'Newspaper', 'author' => 'Anna Green', 'publication_date' => '2023-03-12'],
            ['title' => 'Newspaper - Challenges in the Modern Job Market', 'category' => 'Newspaper', 'author' => 'Henry Walker', 'publication_date' => '2023-04-25'],
            ['title' => 'Newspaper - Future of Remote Work and Digital Nomads', 'category' => 'Newspaper', 'author' => 'Lucas Williams', 'publication_date' => '2023-05-10'],
            ['title' => 'Newspaper - The Growing Popularity of Podcasts', 'category' => 'Newspaper', 'author' => 'Sophia Martinez', 'publication_date' => '2023-06-03'],
        ]);
    }
}
