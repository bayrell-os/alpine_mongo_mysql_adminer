if [ "$ADMIN_BRANCH" = "1" ]; then
    ln -s /etc/nginx/sites-available/99-admin.conf /etc/nginx/sites-enabled/99-admin.conf
else
    ln -s /etc/nginx/sites-available/99-app.conf /etc/nginx/sites-enabled/99-app.conf
fi
