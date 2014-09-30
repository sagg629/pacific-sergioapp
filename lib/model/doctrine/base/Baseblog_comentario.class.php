<?php

/**
 * Baseblog_comentario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $titulo
 * @property integer $blog_articulo_id
 * @property string $autor
 * @property clob $contenido
 * @property blog_articulo $blog_articulo
 * 
 * @method integer         getId()               Returns the current record's "id" value
 * @method string          getTitulo()           Returns the current record's "titulo" value
 * @method integer         getBlogArticuloId()   Returns the current record's "blog_articulo_id" value
 * @method string          getAutor()            Returns the current record's "autor" value
 * @method clob            getContenido()        Returns the current record's "contenido" value
 * @method blog_articulo   getBlogArticulo()     Returns the current record's "blog_articulo" value
 * @method blog_comentario setId()               Sets the current record's "id" value
 * @method blog_comentario setTitulo()           Sets the current record's "titulo" value
 * @method blog_comentario setBlogArticuloId()   Sets the current record's "blog_articulo_id" value
 * @method blog_comentario setAutor()            Sets the current record's "autor" value
 * @method blog_comentario setContenido()        Sets the current record's "contenido" value
 * @method blog_comentario setBlogArticulo()     Sets the current record's "blog_articulo" value
 * 
 * @package    pacific-sergioapp
 * @subpackage model
 * @author     Sergio A Guzman (sagg629@hotmail.com)
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseblog_comentario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('blog_comentario');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('titulo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('blog_articulo_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('autor', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('contenido', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('blog_articulo', array(
             'local' => 'blog_articulo_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}