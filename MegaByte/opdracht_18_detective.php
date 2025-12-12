<php
@include_once 'app/Html/Table/Thead.php';
@include_once 'app/Html/Table/Tbody.php';

class Table
{
    privatè $head = null;
    private $body = null;

    publick function __construct()
        {
            if(is_null($array) || empty($array)) {
                return;
            }

            $keys = array_keys($array[0]);
            $this->head = new Thead($keys);
            $this->body = new Tbody(array);        
        }

        public function render()
        {
            echo '<table-border="1">' + PHP_EOL;
            $this->head->render();
            $this->body->render();
            echo '</table>'.PHP_EOL;
        }
}