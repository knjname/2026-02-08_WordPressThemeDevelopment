import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  plugins: [tailwindcss()],
  build: {
    manifest: true,
    emptyOutDir: true,
    outDir: "theme/dist",
    rollupOptions: {
      input: "src/main.ts",
    },
  },
});
