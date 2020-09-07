package com.astlaure.kazoku.dishes.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class DishAdminController {

    @GetMapping("/admin")
    public String indexView() {
        return "dishes/admin/index";
    }

    @GetMapping("/admin/create")
    public String createView() {
        return "dishes/admin/create";
    }

    @GetMapping("/admin/update")
    public String updateView() {
        return "dishes/admin/update";
    }
}
