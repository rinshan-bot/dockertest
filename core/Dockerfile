FROM python:3.10

ENV PYTHONBUFFERED=1

COPY . /core
WORKDIR /core

COPY requirements.txt requirements.txt
RUN apt-get update -y \
    && apt install virtualenv -y \
    && virtualenv /opt/venv \
    && /opt/venv/bin/pip install --upgrade pip \
    && /opt/venv/bin/pip install -r requirements.txt
# && chmod +x entrypoint.sh \
# && adduser --disable-password --no-create-home rinshan
#     && apt install default-libmysqlclient-dev build-essential pkg-config -y \
ENV PATH="/opt/venv/bin:$PATH"

# USER rinshan

# CMD [ "python","manage.py","runserver","0.0.0.0:8000" ]
# CMD [ "/core/entrypoint.sh" ]
EXPOSE 5000
CMD ["gunicorn","--bind", ":5000", "core.wsgi:application"]