# Hormigas
### Objetivo
   A partir de una matriz bidimencional de entrada que representa una poblacion de hormigas, calcular la siguiente generacion y mostrarla por pantalla.  
   Para calcular la siguiente generación de hormigas se utilizan las siguientes reglas:
1. Cualquier hormiga viva con menos de dos hormigas vecinas vivas, muere.
2. Cualquier hormiga viva con más de tres vecinos vivos, muere.
3. Cualquier hormiga viva con dos o tres vecinos vivos, vive en la siguiente generación.
4. Cualquier hormiga muerta con exactamente tres vecinos vivos se convierte en una
hormiga viva.
5. Cualquier otra combinación la hormiga muere o se mantiene muerta.

### Como Usar
Ejecutar el programa corriendo el comando:

    php index.php [archivo_de_entrada]

Por ejemplo: 

    php index.php TestInputs/test2.json
    
    
El archivo de entrada debe contener una matriz bidimencional en formato JSON. 

El programa mostrara la matriz de salida por consola.
    
### Autor
   Sanabria Facundo