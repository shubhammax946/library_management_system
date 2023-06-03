<?php 
public function searchBooks($query)
{
    // Use the query to search for books in your database
    // You can use SQL LIKE or full-text search depending on your database setup
    $this->db->like('title', $query);
    $query = $this->db->get('books');
    
    // Return the search results as an array of book objects
    return $query->result();
}
