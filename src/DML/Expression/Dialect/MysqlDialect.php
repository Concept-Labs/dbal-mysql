<?php
namespace Concept\DBAL\Mysql\DML\Expression\Dialect;

class MysqlDialect
    extends \Concept\DBAL\DML\Expression\Dialect\DialectAdapter 
{
    public function getIdentifierQuoteChar(): string
    {
        return '`';
    }

    public function getQuoteChar(): string
    {
        return "'";
    }

    public function getEscapeChar(): string
    {
        return '\\';
    }
}   