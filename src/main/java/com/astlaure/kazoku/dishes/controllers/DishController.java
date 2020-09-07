package com.astlaure.kazoku.dishes.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class DishController {

    @GetMapping("/menu")
    public String menuView() {
        return "dishes/menu";
    }
}
