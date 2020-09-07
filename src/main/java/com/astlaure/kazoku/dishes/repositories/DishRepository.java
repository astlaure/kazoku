package com.astlaure.kazoku.dishes.repositories;

import com.astlaure.kazoku.dishes.entities.Dish;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface DishRepository extends JpaRepository<Dish, Long> {
    List<Dish> findAllByActiveTrue();
}
