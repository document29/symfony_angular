<?php
// src/AppBundle/Entity/Task.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="task")
 */

class Task{
    /**
     *@ORM\Column(type="integer")
     *@ORM\Id
     *@ORM\Generatedvalue(strategy="AUTO")
     */
    private $id;

    /**
     *@ORM\Column(type="text")
     */
    private $name;

    /**
     *@ORM\Column(type="text")
     */
    private $description;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \Text
     */
    public function getDescription()
    {
        return $this->description;
    }
}
