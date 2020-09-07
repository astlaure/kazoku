package com.astlaure.kazoku.payments.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class PaymentController {

    @GetMapping("/cart")
    public String cartView() {
        return "payments/cart";
    }

    @GetMapping("/payment")
    public String paymentView() {
        return "payments/payment";
    }

    @GetMapping("/payment/confirmation")
    public String confirmationView() {
        return "payments/confirmation";
    }

    @PostMapping("/payment")
    public String paymentProcess() {
        return "redirect:/payment/confirmation";
    }
}
