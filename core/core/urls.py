
from django.contrib import admin
from django.urls import path
from . import views
urlpatterns = [
    path('home/', admin.site.urls),
    path('', views.function_name),
]
