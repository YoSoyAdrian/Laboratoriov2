# Proyecto Clínica - Trazabilidad de Unidades Transfusionales

Este repositorio contiene un sistema clínico con:

- Multitenancy con `empresa_id`
- Módulo completo de trazabilidad
- Recursos Filament y Livewire
- Generación de etiquetas y brazaletes en PDF

---

## Requisitos

- PHP 8.1+
- MySQL
- Composer
- Node.js y NPM

---

## Instalación

```bash
git clone https://github.com/tu_usuario/proyecto-clinica.git
cd proyecto-clinica
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed --class=TrazabilidadSeeder
npm install && npm run dev
php artisan serve
```

---

## Hosting sugerido

Este proyecto funciona perfecto con:
- Railway
- Render
- GitHub Codespaces

