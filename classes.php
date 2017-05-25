<?php

//Properties correspond to database fields
class Client
{
    public $id;
    public $Sponsor;
    public $Username;
    public $Last_name;
    public $Email; 
    public $Select_country; 
    public $City; 
    public $Adress; 
    public $Zip_Code_Postal_Code;
    public $Area_Code; 
    public $Phone;
    public $Company; 
    public $Gender;
 
 //Empty constructor, where properties will be initialized
    //function__construct()
    //{
    	
   // }
}

/**Network holder (owner) Jan P
* 
*/
class JanP extends Client
{
	

	private function summa_all_orders()
	{
	  
	}
	private function summa_his_orders()
	{
	  
	}
	private function benefit()
	{
	  
	}

    private function discount()
	{
	  
	}

//Displaying the client tree
    private  function printItem()
    {
        
    }
// future additional functions
    public function add_function1()
    {

    }    
    public function add_function2()
    {
    	echo '<br> Это Жан';
    } 
//future data or values
    public $value1;
    public $value2; 

}



/*Sub network holders: Mira P
* And Agnieshka Manager
*/
class FirstLine extends Client
{
	

	protected function summa_all_orders()
	{
	  
	}
	protected function summa_his_orders()
	{
	  
	}
	protected function benefit()
	{
	  
	}

    protected function discount()
	{
	  
	}

//Displaying the client tree
    protected  function printItem()
    {
        
    }
//future additional functions
    public function add_function1()
    {

    }    
    public function add_function2()
    {
    	echo '<br> Это FirstLine';
    } 
//future additional functions
    public $value1;
    public $value2; 

}


/*Second line network: Office Manager
* And Ganesh and Maciej
*/
class SecondLine extends Client
{
	

	public function summa_all_orders()
	{
	  
	}
	public function summa_his_orders()
	{
	  
	}
	public function benefit()
	{
	  
	}

    public function discount()
	{
	  
	}

//Displaying the client tree
    public  function printItem()
    {

    }
//future additional functions
    public function add_function1()
    {

    }    
    public function add_function2()
    {
    	echo '<br> Это SecondLine';
    } 
//future data or values
    public $value1;
    public $value2; 

}


/*Third line network: ... 
* ......
*/
class SomeClient extends Client
{
	

	public function summa_all_orders()
	{
	  
	}
	public function summa_his_orders()
	{
	  
	}
	public function benefit()
	{
	  
	}

    public function discount()
	{
	  
	}

//Displaying the client tree
    public  function printItem()
    {

    }
//future additional functions
    public function add_function1()
    {

    }    
    public function add_function2()
    {
    	echo '<br> Это SomeClient';
    } 
//future data or values
    public $value1;
    public $value2; 

}
?>














