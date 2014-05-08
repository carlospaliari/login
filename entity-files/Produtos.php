<?php

/**
 * Class Produtos
 *
 * @Entity
 * @Table(name="produtos")
 */
class Produtos extends AbstractModel
{
    /**
     * Primary Key column.
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /**
     * Data de cadastro
     * @Column(type="datetime")
     */
    protected $datcad;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $descricao;

    /**
     * @Column(type="decimal")
     */
    protected $preco;

    /**
     * @Column(type="integer")
     */
    protected $grupo_id;

    /**
     * @ManyToOne(targetEntity="Grupos")
     * @JoinColumn(name="grupo_id", referencedColumnName="id")
     */
    private $grupo;

    /**
     * Atribui valor para a propriedade datcad
     *
     * @param DateTime $datcad
     */
    public function setDatcad($datcad)
    {
        $this->datcad = $datcad;
    }

    /**
     * Obtem o valor da propriedade datcad
     *
     * @return DateTime
     */
    public function getDatcad()
    {
        return $this->datcad;
    }

    /**
     * Atribui valor para a propriedade descricao
     *
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Obtem o valor da propriedade descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Atribui valor para a propriedade grupo
     *
     * @param Grupos $grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    }

    /**
     * Obtem o valor da propriedade grupo
     *
     * @return Grupos
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Atribui valor para a propriedade grupo_id
     *
     * @param int $grupo_id
     */
    public function setGrupoId($grupo_id)
    {
        $this->grupo_id = $grupo_id;
    }

    /**
     * Obtem o valor da propriedade grupo_id
     *
     * @return int
     */
    public function getGrupoId()
    {
        return $this->grupo_id;
    }

    /**
     * Atribui valor para a propriedade id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Obtem o valor da propriedade id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Atribui valor para a propriedade preco
     *
     * @param float $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * Obtem o valor da propriedade preco
     *
     * @return float
     */
    public function getPreco()
    {
        return $this->preco;
    }

} 