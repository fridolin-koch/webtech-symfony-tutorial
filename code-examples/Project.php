<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("projects")
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $id;

    //... more fields

    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="project")
     * @ORM\OrderBy({"modifiedDate" = "ASC"})
     */
    private $tasks;

    //... getters and setters
}
