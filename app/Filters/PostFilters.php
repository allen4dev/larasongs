<?php

namespace App\Filters;

use Illuminate\Http\Request;

// ToDo: Make an abstract class that make the heavy work
// a subclass just should define the filters for this resource
class PostFilters
{
    public $request;
    public $query;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($query)
    {
        $this->query = $query;

        foreach($this->request->all() as $filter => $value) {
            if (!method_exists($this, $filter)) {
                continue;
            }

            if (!$this->request->filled($filter)) {
                $this->$filter();
            }
            
            $this->$filter($value);
        }


        return $this->query;
    }

    public function title($title = '')
    {
        return $this->query->where('title', 'like', "%{$title}%");
    }
}

