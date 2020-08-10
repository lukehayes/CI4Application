<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddPosts extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'First Post Title',
            'content'    => 'The post content'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO posts (title, content) VALUES(:title:, :content)",
            $data
        );

        // Using Query Builder
        $this->db->table('posts')->insert($data);
    }
}
