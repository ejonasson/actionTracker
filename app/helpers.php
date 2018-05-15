<?php


/**
 * Get a placeholder Entity Id for a specific Model
 * Used in Model factories
 * @param  Class $entityClass
 * @return int ID
 */
function getPlaceholderEntityId($entityClass)
{
    return $entityClass::first() ? $entityClass::first()->id : factory($entityClass)->create()->id;
}
