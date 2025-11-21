<?php
class Mega_Menu_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Отключаем стандартный sub-menu
        return;
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        return;
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        // =====================================================
        // 1. Обычные пункты меню
        // =====================================================
        if ($item->ID != 196 && $item->menu_item_parent != 196) {
            // Полный ручной вывод (вообще не используем parent::)
            $output .= '<li class="' . esc_attr(implode(' ', $item->classes)) . '">';
            $output .= '<a href="' . esc_url($item->url) . '" class="menu__link">' . esc_html($item->title) . '</a>';
            return;
        }

        // =====================================================
        // 2. Главный пункт "Послуги" — МЕГАМЕНЮ
        // =====================================================
        if ($item->ID == 196) {
            $output .= '
            <li class="menu__item menu__item--services menu-item-' . $item->ID . '">
                <a href="' . esc_url($item->url) . '" class="menu__link">' . esc_html($item->title) . '</a>

                <div class="mega-menu mega-menu--services">
                    <div class="mega-menu__inner">

                        <div class="mega-menu__left">
                        <div class="mega-menu__header">
                            <h3 class="mega-menu__title">
                                Лікування вимагає терпіння, моральної підтримки й довіри.
                            </h3>
                            <a href="/services/" class="mega-menu__btn button">
                                <span>Всі послуги</span>
                                <i class="icon icon-arrow-right2" aria-hidden="true"></i>
                            </a>
                        </div>

                            <ul class="mega-menu__list">
            ';
            return;
        }

        // =====================================================
        // 3. Дочерние элементы пункта 196
        // =====================================================
        if ($item->menu_item_parent == 196) {
            $output .= '
                <li class="menu__item menu-item-' . $item->ID . '">
                    <a href="' . esc_url($item->url) . '" class="menu__link">' . esc_html($item->title) . '</a>
                </li>
            ';
            return;
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        // =====================================================
        // 4. Закрываем мегаменю
        // =====================================================
        if ($item->ID == 196) {
            $output .= '
                            </ul>
                        </div>

                        <div class="mega-menu__image">
                            <img src="/wp-content/uploads/2025/11/about-img.jpg" alt="">
                        </div>

                    </div>
                </div>
            </li>';
            return;
        }

        // =====================================================
        // 5. Обычные пункты
        // =====================================================
        if ($item->menu_item_parent != 196) {
            // Полный ручной вывод — закрываем <li>, но WP НЕ вмешивается
            $output .= '</li>';
        }

        return;
    }
}
