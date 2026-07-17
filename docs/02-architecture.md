# Theme Architecture

## Overview

Estate Theme is the presentation layer of the Estate Platform.


Architecture:

Estate Engine
      |
      |
      ↓
Property Data API
      |
      |
      ↓
Estate Theme
      |
      |
      ↓
Frontend


## Responsibilities


### Estate Engine

Responsible for:

- properties
- fields
- schemas
- import
- synchronization
- users
- business rules


### Estate Theme

Responsible for:

- templates
- Gutenberg patterns
- UI components
- styling
- animations
- responsive layout


## Structure

theme/

├── templates/

Page structures


├── parts/

Header and footer


├── patterns/

Reusable Gutenberg sections


├── assets/

CSS and JS


├── inc/

PHP functionality


## Development Rules

Theme should not directly depend on database structure.

All data access should go through an abstraction layer.