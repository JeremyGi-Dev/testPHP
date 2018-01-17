<?php

class Contact {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * @var string
     */
    protected $id;

    public function getId() {
        return $this -> id;
    }

    /**
     * @Column(type="string", unique=true)
     * @var string
     */
    protected $name;

    public function getName() {
        return $this -> name;
    }

    public function setName($name) {
        $this -> name = $name;
        return $this;
    }

    /**
     * @Column(type="text")
     * @var string
     */
    protected $content;

    public function getContent() {
        return $this -> content;
    }

    public function setContent($content) {
        $this -> content = $content;
        return $this;
    }

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $created;

    public function getCreated() {
        return $this -> created;
    }

    public function setCreated($created) {
        $this -> created = $created;
        return $this;
    }
}