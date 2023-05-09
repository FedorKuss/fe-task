<?php

namespace App\Model;

class WallpaperModel 
{
    private array $abstract = [
        'https://images.unsplash.com/photo-1553949345-eb786bb3f7ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d2FsbHBhcGVyJTIwYWJzdHJhY3R8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbHBhcGVyJTIwYWJzdHJhY3R8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1564934304050-e9bb87a29c13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHdhbGxwYXBlciUyMGFic3RyYWN0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1620121478247-ec786b9be2fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHdhbGxwYXBlciUyMGFic3RyYWN0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60'
    ];

    private array $cars = [
        'https://images.unsplash.com/photo-1533106418989-88406c7cc8ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbHBhcGVyJTIwY2FyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1549556889-cba541c33c0b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
        'https://images.unsplash.com/photo-1571607388263-1044f9ea01dd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1995&q=80',
        'https://images.unsplash.com/photo-1610305779357-3337a9597941?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHdhbGxwYXBlciUyMGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60'
    ];

    private array $nature = [
        'https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bmF0dXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bmF0dXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG5hdHVyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1586348943529-beaae6c28db9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bmF0dXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1501854140801-50d01698950b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fG5hdHVyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60',
        'https://images.unsplash.com/photo-1505144808419-1957a94ca61e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG5hdHVyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60'
    ];


    public function getWallpapersByCategory(string $category): array
    {
        return match($category){
            'abstract' => $this->abstract,
            'cars' => $this->cars,
            'nature' => $this->nature,
            default => $this->getAll()
        };
    }

    public function getAll(): array
    {
        return array_merge($this->abstract, $this->cars, $this->nature);
    }
}