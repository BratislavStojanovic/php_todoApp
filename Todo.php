<?php 



class Todo {

public function isDone()
{
    return ($this->done) ? true : false; // false
}

public function makeItDone()
{
  $this->done = 1;
}

public function showTodo(Type $var = null)
{
  if ($this->isDone()) {
  
    return "<s>".$this->title."</s>";
  }else {
    return $this->title;
  }
}



}