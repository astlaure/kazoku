package com.astlaure.kazoku.dishes.entities;

import com.astlaure.kazoku.dishes.enums.DishCategory;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

import javax.persistence.*;

@Data
@Builder
@NoArgsConstructor
@AllArgsConstructor
@Entity
@Table(name = "dishes")
public class Dish {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Builder.Default
    private boolean active = true;

    private String photo;

    private String nameFr;

    private String nameEn;

    private DishCategory category;

    private String descriptionFr;

    private String descriptionEn;
}
