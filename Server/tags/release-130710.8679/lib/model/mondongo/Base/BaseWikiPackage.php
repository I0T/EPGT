<?php

/**
 * Base class of WikiPackage document.
 */
abstract class BaseWikiPackage extends \Mondongo\Document\Document implements \ArrayAccess
{


    protected $data = array(
        'fields' => array(
            'name' => null,
            'scene' => null,
            'wiki_id' => null,
            'is_public' => null,
            'sort' => null,
            'start_time' => null,
            'end_time' => null,
            'created_at' => null,
            'updated_at' => null,
        ),
    );


    protected $fieldsModified = array(

    );


    static protected $dataCamelCaseMap = array(
        'name' => 'Name',
        'scene' => 'Scene',
        'wiki_id' => 'WikiId',
        'is_public' => 'IsPublic',
        'sort' => 'Sort',
        'start_time' => 'StartTime',
        'end_time' => 'EndTime',
        'created_at' => 'CreatedAt',
        'updated_at' => 'UpdatedAt',
    );

    /**
     * Returns the Mondongo of the document.
     *
     * @return Mondongo\Mondongo The Mondongo of the document.
     */
    public function getMondongo()
    {
        return \Mondongo\Container::getForDocumentClass('WikiPackage');
    }

    /**
     * Returns the repository of the document.
     *
     * @return Mondongo\Repository The repository of the document.
     */
    public function getRepository()
    {
        return $this->getMondongo()->getRepository('WikiPackage');
    }


    protected function updateTimestampableCreated()
    {
        $this->setCreatedAt(new \DateTime());
    }


    protected function updateTimestampableUpdated()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * Set the data in the document (hydrate).
     *
     * @return void
     */
    public function setDocumentData($data)
    {
        $this->id = $data['_id'];

        if (isset($data['name'])) {
            $this->data['fields']['name'] = (string) $data['name'];
        }
        if (isset($data['scene'])) {
            $this->data['fields']['scene'] = (string) $data['scene'];
        }
        if (isset($data['wiki_id'])) {
            $this->data['fields']['wiki_id'] = (string) $data['wiki_id'];
        }
        if (isset($data['is_public'])) {
            $this->data['fields']['is_public'] = (bool) $data['is_public'];
        }
        if (isset($data['sort'])) {
            $this->data['fields']['sort'] = (int) $data['sort'];
        }
        if (isset($data['start_time'])) {
            $this->data['fields']['start_time'] = (string) $data['start_time'];
        }
        if (isset($data['end_time'])) {
            $this->data['fields']['end_time'] = (string) $data['end_time'];
        }
        if (isset($data['created_at'])) {
            $date = new \DateTime(); $date->setTimestamp($data['created_at']->sec); $this->data['fields']['created_at'] = $date;
        }
        if (isset($data['updated_at'])) {
            $date = new \DateTime(); $date->setTimestamp($data['updated_at']->sec); $this->data['fields']['updated_at'] = $date;
        }


        
    }

    /**
     * Convert an array of fields with data to Mongo values.
     *
     * @param array $fields An array of fields with data.
     *
     * @return array The fields with data in Mongo values.
     */
    public function fieldsToMongo($fields)
    {
        if (isset($fields['name'])) {
            $fields['name'] = (string) $fields['name'];
        }
        if (isset($fields['scene'])) {
            $fields['scene'] = (string) $fields['scene'];
        }
        if (isset($fields['wiki_id'])) {
            $fields['wiki_id'] = (string) $fields['wiki_id'];
        }
        if (isset($fields['is_public'])) {
            $fields['is_public'] = (bool) $fields['is_public'];
        }
        if (isset($fields['sort'])) {
            $fields['sort'] = (int) $fields['sort'];
        }
        if (isset($fields['start_time'])) {
            $fields['start_time'] = (string) $fields['start_time'];
        }
        if (isset($fields['end_time'])) {
            $fields['end_time'] = (string) $fields['end_time'];
        }
        if (isset($fields['created_at'])) {
            if ($fields['created_at'] instanceof \DateTime) { $fields['created_at'] = $fields['created_at']->getTimestamp(); } elseif (is_string($fields['created_at'])) { $fields['created_at'] = strtotime($fields['created_at']); } $fields['created_at'] = new \MongoDate($fields['created_at']);
        }
        if (isset($fields['updated_at'])) {
            if ($fields['updated_at'] instanceof \DateTime) { $fields['updated_at'] = $fields['updated_at']->getTimestamp(); } elseif (is_string($fields['updated_at'])) { $fields['updated_at'] = strtotime($fields['updated_at']); } $fields['updated_at'] = new \MongoDate($fields['updated_at']);
        }


        return $fields;
    }

    /**
     * Set the "name" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setName($value)
    {
        if (!array_key_exists('name', $this->fieldsModified)) {
            $this->fieldsModified['name'] = $this->data['fields']['name'];
        } elseif ($value === $this->fieldsModified['name']) {
            unset($this->fieldsModified['name']);
        }

        $this->data['fields']['name'] = $value;
    }

    /**
     * Returns the "name" field.
     *
     * @return mixed The name field.
     */
    public function getName()
    {
        return $this->data['fields']['name'];
    }

    /**
     * Set the "scene" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setScene($value)
    {
        if (!array_key_exists('scene', $this->fieldsModified)) {
            $this->fieldsModified['scene'] = $this->data['fields']['scene'];
        } elseif ($value === $this->fieldsModified['scene']) {
            unset($this->fieldsModified['scene']);
        }

        $this->data['fields']['scene'] = $value;
    }

    /**
     * Returns the "scene" field.
     *
     * @return mixed The scene field.
     */
    public function getScene()
    {
        return $this->data['fields']['scene'];
    }

    /**
     * Set the "wiki_id" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setWikiId($value)
    {
        if (!array_key_exists('wiki_id', $this->fieldsModified)) {
            $this->fieldsModified['wiki_id'] = $this->data['fields']['wiki_id'];
        } elseif ($value === $this->fieldsModified['wiki_id']) {
            unset($this->fieldsModified['wiki_id']);
        }

        $this->data['fields']['wiki_id'] = $value;
    }

    /**
     * Returns the "wiki_id" field.
     *
     * @return mixed The wiki_id field.
     */
    public function getWikiId()
    {
        return $this->data['fields']['wiki_id'];
    }

    /**
     * Set the "is_public" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setIsPublic($value)
    {
        if (!array_key_exists('is_public', $this->fieldsModified)) {
            $this->fieldsModified['is_public'] = $this->data['fields']['is_public'];
        } elseif ($value === $this->fieldsModified['is_public']) {
            unset($this->fieldsModified['is_public']);
        }

        $this->data['fields']['is_public'] = $value;
    }

    /**
     * Returns the "is_public" field.
     *
     * @return mixed The is_public field.
     */
    public function getIsPublic()
    {
        return $this->data['fields']['is_public'];
    }

    /**
     * Set the "sort" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setSort($value)
    {
        if (!array_key_exists('sort', $this->fieldsModified)) {
            $this->fieldsModified['sort'] = $this->data['fields']['sort'];
        } elseif ($value === $this->fieldsModified['sort']) {
            unset($this->fieldsModified['sort']);
        }

        $this->data['fields']['sort'] = $value;
    }

    /**
     * Returns the "sort" field.
     *
     * @return mixed The sort field.
     */
    public function getSort()
    {
        return $this->data['fields']['sort'];
    }

    /**
     * Set the "start_time" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setStartTime($value)
    {
        if (!array_key_exists('start_time', $this->fieldsModified)) {
            $this->fieldsModified['start_time'] = $this->data['fields']['start_time'];
        } elseif ($value === $this->fieldsModified['start_time']) {
            unset($this->fieldsModified['start_time']);
        }

        $this->data['fields']['start_time'] = $value;
    }

    /**
     * Returns the "start_time" field.
     *
     * @return mixed The start_time field.
     */
    public function getStartTime()
    {
        return $this->data['fields']['start_time'];
    }

    /**
     * Set the "end_time" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setEndTime($value)
    {
        if (!array_key_exists('end_time', $this->fieldsModified)) {
            $this->fieldsModified['end_time'] = $this->data['fields']['end_time'];
        } elseif ($value === $this->fieldsModified['end_time']) {
            unset($this->fieldsModified['end_time']);
        }

        $this->data['fields']['end_time'] = $value;
    }

    /**
     * Returns the "end_time" field.
     *
     * @return mixed The end_time field.
     */
    public function getEndTime()
    {
        return $this->data['fields']['end_time'];
    }

    /**
     * Set the "created_at" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setCreatedAt($value)
    {
        if (!array_key_exists('created_at', $this->fieldsModified)) {
            $this->fieldsModified['created_at'] = $this->data['fields']['created_at'];
        } elseif ($value === $this->fieldsModified['created_at']) {
            unset($this->fieldsModified['created_at']);
        }

        $this->data['fields']['created_at'] = $value;
    }

    /**
     * Returns the "created_at" field.
     *
     * @return mixed The created_at field.
     */
    public function getCreatedAt()
    {
        return $this->data['fields']['created_at'];
    }

    /**
     * Set the "updated_at" field.
     *
     * @param mixed $value The value.
     *
     * @return void
     */
    public function setUpdatedAt($value)
    {
        if (!array_key_exists('updated_at', $this->fieldsModified)) {
            $this->fieldsModified['updated_at'] = $this->data['fields']['updated_at'];
        } elseif ($value === $this->fieldsModified['updated_at']) {
            unset($this->fieldsModified['updated_at']);
        }

        $this->data['fields']['updated_at'] = $value;
    }

    /**
     * Returns the "updated_at" field.
     *
     * @return mixed The updated_at field.
     */
    public function getUpdatedAt()
    {
        return $this->data['fields']['updated_at'];
    }


    public function preInsertExtensions()
    {
        $this->updateTimestampableCreated();

    }


    public function postInsertExtensions()
    {

    }


    public function preUpdateExtensions()
    {
        $this->updateTimestampableUpdated();

    }


    public function postUpdateExtensions()
    {

    }


    public function preSaveExtensions()
    {

    }


    public function postSaveExtensions()
    {

    }


    public function preDeleteExtensions()
    {

    }


    public function postDeleteExtensions()
    {

    }

    /**
     * Returns the data CamelCase map.
     *
     * @return array The data CamelCase map.
     */
    static public function getDataCamelCaseMap()
    {
        return self::$dataCamelCaseMap;
    }

    /**
     * Import data from an array.
     *
     * @param array $array An array.
     *
     * @return void
     */
    public function fromArray($array)
    {
        if (isset($array['name'])) {
            $this->setName($array['name']);
        }
        if (isset($array['scene'])) {
            $this->setScene($array['scene']);
        }
        if (isset($array['wiki_id'])) {
            $this->setWikiId($array['wiki_id']);
        }
        if (isset($array['is_public'])) {
            $this->setIsPublic($array['is_public']);
        }
        if (isset($array['sort'])) {
            $this->setSort($array['sort']);
        }
        if (isset($array['start_time'])) {
            $this->setStartTime($array['start_time']);
        }
        if (isset($array['end_time'])) {
            $this->setEndTime($array['end_time']);
        }
        if (isset($array['created_at'])) {
            $this->setCreatedAt($array['created_at']);
        }
        if (isset($array['updated_at'])) {
            $this->setUpdatedAt($array['updated_at']);
        }

    }

    /**
     * Export the document data to array.
     *
     * @param bool $withEmbeddeds If export embeddeds or not.
     *
     * @return array An array with the document data.
     */
    public function toArray($withEmbeddeds = true)
    {
        $array = array();

        if (null !== $this->data['fields']['name']) {
            $array['name'] = $this->data['fields']['name'];
        }
        if (null !== $this->data['fields']['scene']) {
            $array['scene'] = $this->data['fields']['scene'];
        }
        if (null !== $this->data['fields']['wiki_id']) {
            $array['wiki_id'] = $this->data['fields']['wiki_id'];
        }
        if (null !== $this->data['fields']['is_public']) {
            $array['is_public'] = $this->data['fields']['is_public'];
        }
        if (null !== $this->data['fields']['sort']) {
            $array['sort'] = $this->data['fields']['sort'];
        }
        if (null !== $this->data['fields']['start_time']) {
            $array['start_time'] = $this->data['fields']['start_time'];
        }
        if (null !== $this->data['fields']['end_time']) {
            $array['end_time'] = $this->data['fields']['end_time'];
        }
        if (null !== $this->data['fields']['created_at']) {
            $array['created_at'] = $this->data['fields']['created_at'];
        }
        if (null !== $this->data['fields']['updated_at']) {
            $array['updated_at'] = $this->data['fields']['updated_at'];
        }


        if ($withEmbeddeds) {

        }

        return $array;
    }

    /**
     * Throws an \LogicException because you cannot check if data exists.
     *
     * @throws \LogicException
     */
    public function offsetExists($name)
    {
        throw new \LogicException('You cannot check if data exists in a document.');
    }

    /**
     * Set data in the document.
     *
     * @param string $name  The data name.
     * @param mixed  $value The value.
     *
     * @return void
     *
     * @throws \InvalidArgumentException If the data name does not exists.
     */
    public function offsetSet($name, $value)
    {
        if (!isset(self::$dataCamelCaseMap[$name])) {
            throw new \InvalidArgumentException(sprintf('The name "%s" does not exists.', $name));
        }

        $method = 'set'.self::$dataCamelCaseMap[$name];

        $this->$method($value);
    }

    /**
     * Returns data of the document.
     *
     * @param string $name The data name.
     *
     * @return mixed Some data.
     *
     * @throws \InvalidArgumentException If the data name does not exists.
     */
    public function offsetGet($name)
    {
        if (!isset(self::$dataCamelCaseMap[$name])) {
            throw new \InvalidArgumentException(sprintf('The data "%s" does not exists.', $name));
        }

        $method = 'get'.self::$dataCamelCaseMap[$name];

        return $this->$method();
    }

    /**
     * Throws a \LogicException because you cannot unset data in the document.
     *
     * @throws \LogicException
     */
    public function offsetUnset($name)
    {
        throw new \LogicException('You cannot unset data in the document.');
    }

    /**
     * Set data in the document.
     *
     * @param string $name  The data name.
     * @param mixed  $value The value.
     *
     * @return void
     *
     * @throws \InvalidArgumentException If the data name does not exists.
     */
    public function __set($name, $value)
    {
        if (!isset(self::$dataCamelCaseMap[$name])) {
            throw new \InvalidArgumentException(sprintf('The name "%s" does not exists.', $name));
        }

        $method = 'set'.self::$dataCamelCaseMap[$name];

        $this->$method($value);
    }

    /**
     * Returns data of the document.
     *
     * @param string $name The data name.
     *
     * @return mixed Some data.
     *
     * @throws \InvalidArgumentException If the data name does not exists.
     */
    public function __get($name)
    {
        if (!isset(self::$dataCamelCaseMap[$name])) {
            throw new \InvalidArgumentException(sprintf('The data "%s" does not exists.', $name));
        }

        $method = 'get'.self::$dataCamelCaseMap[$name];

        return $this->$method();
    }

    /**
     * Returns the data map.
     *
     * @return array The data map.
     */
    static public function getDataMap()
    {
        return array(
            'fields' => array(
                'name' => array(
                    'type' => 'string',
                ),
                'scene' => array(
                    'type' => 'string',
                ),
                'wiki_id' => array(
                    'type' => 'string',
                ),
                'is_public' => array(
                    'type' => 'boolean',
                ),
                'sort' => array(
                    'type' => 'integer',
                ),
                'start_time' => array(
                    'type' => 'string',
                ),
                'end_time' => array(
                    'type' => 'string',
                ),
                'created_at' => array(
                    'type' => 'date',
                ),
                'updated_at' => array(
                    'type' => 'date',
                ),
            ),
            'references' => array(

            ),
            'embeddeds' => array(

            ),
            'relations' => array(

            ),
        );
    }
}