<?php


interface CustomExceptionInterface
{
    public function getCustomMessage(): string;
}


class MyCustomException extends Exception implements CustomExceptionInterface
{
    public function getCustomMessage(): string
    {
        return "This is a custom exception: " . $this->getMessage();
    }
}


try {

    throw new MyCustomException("Something went wrong!");
    
} catch (CustomExceptionInterface $e) {

    echo $e->getCustomMessage();
} catch (Exception $e) {

    echo "General exception: " . $e->getMessage();
}
 //  finally {
//     echo "Execution complete.";
// }
