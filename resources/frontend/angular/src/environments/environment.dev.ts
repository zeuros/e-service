import { AppEnvironment } from '../app/core/interfaces/app-environment.interface';

export const environment: AppEnvironment = {
  production: false,
  baseApiUrl: 'https://localhost:8000/api/',
  security: {
    allowedOrigins: '*' // on dev, we allow every redirection, it'll be defined into proxy for other environments
  }
};
