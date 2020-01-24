<?php
interface DataServiceInterface
{
    function create($newModel);
    function read($id);
    function readAll();
    function update($updatedModel);
    function delete($id);
}

