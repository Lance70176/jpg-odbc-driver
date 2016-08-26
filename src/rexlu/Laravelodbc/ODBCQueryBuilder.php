<?php
namespace rexlu\Laravelodbc;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\ConnectionInterface;
use rexlu\Laravelodbc\ODBCQueryGrammar as Grammar;
use Illuminate\Database\Query\Processors\Processor;

class ODBCQueryBuilder extends Builder {

    /**
     * Create a new query builder instance.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  \Illuminate\Database\Query\Grammars\Grammar  $grammar
     * @param  \Illuminate\Database\Query\Processors\Processor  $processor
     * @return void
     */
    public function __construct(ConnectionInterface $connection,
                                Grammar $grammar,
                                Processor $processor)
    {
             parent::__construct($connection, $grammar, $processor);
    }

        public function useIndex($columns)
        {
            $this->useIndex = $columns;

            return $this;
        }
}
