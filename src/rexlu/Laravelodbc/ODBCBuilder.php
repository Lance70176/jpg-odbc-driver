<?php
namespace rexlu\Laravelodbc;

use Illuminate\Database\Query\Builder;


class ODBCBuilder extends Builder {

        public $useIndex;

        public function useIndex($columns)
        {
            $this->useIndex = $columns;

            return $this;
        }
}
