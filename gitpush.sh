#!/bin/sh

#para que sea ejecutable el ./github.sh
#chmod +x github.sh

#para descargar cambios
#git pull

#para subir cambios
#./github.sh

echo 'Subiendo archivos modificados a GitHub'

#saber ruta repositorio
git config --get remote.origin.url

read -p

# indicamos a Git los archivos a subir
git add .

# mensaje del commit
msj_commit="commit $(date +"%d-%m-%Y %T")"
git commit -m "$msj_commit"

# Y terminamos subiendo los archivos
git push
