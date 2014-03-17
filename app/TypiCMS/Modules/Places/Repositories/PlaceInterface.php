<?php namespace TypiCMS\Modules\Places\Repositories;

interface PlaceInterface
{

    /**
     * Get paginated models
     *
     * @param int $page Number of models per page
     * @param int $limit Results per page
     * @param boolean $all Show published or all
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function byPage($page = 1, $limit = 10, array $with = array(), $all = false);

    /**
     * Get all models
     *
     * @param boolean $all Show published or all
     * @param array $with Eager load related models
     * @return StdClass Object with $items
     */
    public function getAll(array $with = array(), $all = false);

    /**
     * Get single model by slug
     *
     * @param string $slug slug of model
     * @return object model
     */
    public function bySlug($slug);

    /**
     * Create a new model
     *
     * @param array  Data to create a new model
     * @return boolean
     */
    public function create(array $data);

    /**
     * Update an existing model
     *
     * @param array  Data to update a model
     * @return boolean
     */
    public function update(array $data);


}