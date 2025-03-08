# FastAPI Project for Church Scriptures

## Project Overview
This project provides endpoints for querying the scriptures of The Church of Jesus Christ of Latter-day Saints using FastAPI.

## Project Structure
```
app/
├── api/
├── models/
│   ├── capitulo.py
│   ├── division.py
│   ├── libro.py
│   ├── parte.py
│   ├── pericopa.py
│   ├── versiculo.py
│   └── volumen.py
└── database.py
```

## Models
The following models have been created to represent the database tables:
- **Capitulo**: Represents chapters in the scriptures.
- **Division**: Represents divisions of the scriptures.
- **Libro**: Represents books in the scriptures.
- **Parte**: Represents parts of the scriptures.
- **Pericopa**: Represents pericopes in the scriptures.
- **Versiculo**: Represents verses in the scriptures.
- **Volumen**: Represents volumes of the scriptures.

## Database Configuration
The project uses SQLAlchemy for database interactions. The database connection is configured in the `database.py` file, and the connection details are stored in a `.env` file.

```
DATABASE_URL=mysql://root:@localhost/bcnew
