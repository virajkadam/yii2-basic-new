git init

git config core.fileMode false

git add .
git commit -m "'$1'"

git rm -r --cached .
git add .
git commit -m "'$1'"

git pull

chmod -R 777 ../yii2-basic-new/
chown -R www-data:www-data ../yii2-basic-new/

git push
