import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
  base: "/Ntamupaka-F-W/", // Add your repository name here
  plugins: [react()],
  build: {
    rollupOptions: {
      external: [],
    },
  },
});
