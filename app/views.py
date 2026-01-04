from app import app
from flask import render_template, url_for

@app.route("/")
def homepage():
    
    return render_template("index.html")

@app.route("/cadastro/")
def cadastro():
    
    return render_template("cadastro.html")

@app.route("/login/")
def login():
    
    return render_template("login.html")

@app.route("/navegar/")
def navegar():
    return render_template("navegar.html")


@app.route("/sistema/")
def sistema():
    
    return render_template("sistema.html")