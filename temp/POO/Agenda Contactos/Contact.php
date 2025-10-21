<?php

class Contact
{

    private string $name;
    private string $email;
    private string $phone;

    private string $avatarPath;

    private string $avatarName;

    private bool $favorite;


    public function __construct(string $name, string $email, string $phone, string $avatarPath,bool $favorite)
    {


        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->avatarPath = $avatarPath;
        $this->favorite = $favorite;





    }



    public function getName(): string
    {

        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {

        return $this->phone;
    }


    public function getAvatarPath(): string
    {

        return $this->avatarPath;
    }


    public function toggleFavorite(bool $favorite): void
    {

        if ($favorite) {
            $this->favorite = true;

        } else {

            $this->favorite = false;
        }


    }



    public function getSummary(): string{


        return $this->name ." ". $this->email ." ". $this->phone ." ". $this->avatarPath;



    }
}

?>