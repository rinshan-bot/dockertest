
import os
from pathlib import Path
import dotenv
from django.core.wsgi import get_wsgi_application

CURRENT_DIR = Path(__file__).resolve().parent
BASE_DIR = CURRENT_DIR.parent

ENV_FILE_PATH = BASE_DIR / ".env"
dotenv.read_dotenv(str(ENV_FILE_PATH))
os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'core.settings')

application = get_wsgi_application()
