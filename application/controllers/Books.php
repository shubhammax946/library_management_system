<?php 
public function search()
{
    // Get the search query from the URL parameters
    $query = $this->input->get('query');

    // Load the necessary model
    $this->load->model('Book_model');
    
    // Call the searchBooks method in the model to retrieve the search results
    $data['books'] = $this->Book_model->searchBooks($query);
    
    // Load the view and pass the search results data
    $this->load->view('search_results', $data);
}
